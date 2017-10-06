<?php

class __Mustache_f69dc1d81af0e410e4d1f4f41ba62781 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'navigation' section
        $value = $context->find('navigation');
        $buffer .= $this->sectionD5003cfaf69453d82ac06f42adf79117($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionD5003cfaf69453d82ac06f42adf79117(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="controls" data-view="{{view}}">
    {{{navigation}}}
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="controls" data-view="';
                $value = $this->resolveValue($context->find('view'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('navigation'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
