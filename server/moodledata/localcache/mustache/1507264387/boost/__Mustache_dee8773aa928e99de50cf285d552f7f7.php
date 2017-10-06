<?php

class __Mustache_dee8773aa928e99de50cf285d552f7f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-8 push-md-2 col-xl-6 push-xl-3">
';
        $buffer .= $indent . '            <div class="card">
';
        $buffer .= $indent . '                <div class="card-block">
';
        $buffer .= $indent . '                    <div class="card-title text-xs-center">
';
        // 'logourl' section
        $value = $context->find('logourl');
        $buffer .= $this->section51d3179e598a9cb5ae4e658295356555($context, $indent, $value);
        // 'logourl' inverted section
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '                            <h2>';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</h2>
';
        }
        $buffer .= $indent . '                        <hr>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="card-title">
';
        $buffer .= $indent . '                        <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7011f9eedafcdb8d9dc662b124b2ed1e($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('formhtml'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section51d3179e598a9cb5ae4e658295356555(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}"/></h2>
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
                
                $buffer .= $indent . '                            <h2><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7011f9eedafcdb8d9dc662b124b2ed1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newaccount';
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
                
                $buffer .= 'newaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
