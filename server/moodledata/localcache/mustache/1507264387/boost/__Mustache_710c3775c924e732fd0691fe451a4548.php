<?php

class __Mustache_710c3775c924e732fd0691fe451a4548 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '
';
        // 'subscription' section
        $value = $context->find('subscription');
        $buffer .= $this->section8ec53ce7da8be916f81126119f3708c2($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionE13f58319aebbbe34686c04d005dd53c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscriptionsource, core_calendar, {{name}}';
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
                
                $buffer .= 'subscriptionsource, core_calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8e73235db39fc4da3e094535e71f9b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p><a href="{{url}}">{{#str}}subscriptionsource, core_calendar, {{name}}{{/str}}</a></p>
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
                
                $buffer .= $indent . '                <p><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE13f58319aebbbe34686c04d005dd53c($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50ba117e02715cdc07bf94bb26b0d8ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div>
            {{#url}}
                <p><a href="{{url}}">{{#str}}subscriptionsource, core_calendar, {{name}}{{/str}}</a></p>
            {{/url}}
            {{^url}}
                <p>{{#str}}subscriptionsource, core_calendar, {{name}}{{/str}}</p>
            {{/url}}
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
                
                $buffer .= $indent . '        <div>
';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionD8e73235db39fc4da3e094535e71f9b5($context, $indent, $value);
                // 'url' inverted section
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <p>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionE13f58319aebbbe34686c04d005dd53c($context, $indent, $value);
                    $buffer .= '</p>
';
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ec53ce7da8be916f81126119f3708c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#displayeventsource}}
        <div>
            {{#url}}
                <p><a href="{{url}}">{{#str}}subscriptionsource, core_calendar, {{name}}{{/str}}</a></p>
            {{/url}}
            {{^url}}
                <p>{{#str}}subscriptionsource, core_calendar, {{name}}{{/str}}</p>
            {{/url}}
        </div>
    {{/displayeventsource}}
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
                
                // 'displayeventsource' section
                $value = $context->find('displayeventsource');
                $buffer .= $this->section50ba117e02715cdc07bf94bb26b0d8ad($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
