<?php

class __Mustache_78713d94de2b27af9ca86bce206a92be extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'filter_selector' section
        $value = $context->find('filter_selector');
        $buffer .= $this->section4b53a4a4dbd78f6173b1d845bbd034de($context, $indent, $value);

        return $buffer;
    }

    private function section4b53a4a4dbd78f6173b1d845bbd034de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="header">
    {{{filter_selector}}}
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
                
                $buffer .= $indent . '<div class="header">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('filter_selector'), $context);
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
