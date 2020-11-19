<?php

namespace Codelight\WordPressDecorator;

trait DecoratorTrait
{
    protected $object;

    /**
     * Call the snake_cased method from the presentable WP object, if it exists
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $snakeCaseName = $this->camelToSnakeCase($name);

        if (method_exists($this->object, $snakeCaseName)) {
            return call_user_func_array([$this->object, $snakeCaseName], $arguments);
        }

        $class = get_class();
        $objectData = print_r($this->object, true);

        trigger_error(
            "Function {$name} called from (parent?) {$class}, but it does not exist in wrapped object {$objectData}",
            E_USER_ERROR
        );
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Convert camel case to snake case
     * https://stackoverflow.com/questions/1993721/how-to-convert-camelcase-to-camel-case
     *
     * @param $string
     * @return string
     */
    protected function camelToSnakeCase($string)
    {
        return ltrim(strtolower(preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $string)), '_');
    }
}
