<?php

class __Mustache_baa5da9aa9b598cff4ca4aa40a6aea15 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<h4>';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '<div class="processor-container"
';
        $buffer .= $indent . '    data-user-id="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-processor-name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-processor-id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="loading-container">
';
        $buffer .= $indent . '        <div class="vertical-align"></div>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <form>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('formhtml'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        <div class="form-actions m-t-1">
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-primary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5200e3c03061df0fcc2d285702091399($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <button type="button" class="btn" data-cancel-button>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section60daf9114f9dfa62bc1b95a0f5a6bfa0($context, $indent, $value);

        return $buffer;
    }

    private function section5200e3c03061df0fcc2d285702091399(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' savechanges ';
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
                
                $buffer .= ' savechanges ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
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
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60daf9114f9dfa62bc1b95a0f5a6bfa0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_message/preferences_processor_form\'], function($, ProcessorForm) {
    new ProcessorForm($(\'[data-processor-id="{{uniqid}}"]\'));
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'core_message/preferences_processor_form\'], function($, ProcessorForm) {
';
                $buffer .= $indent . '    new ProcessorForm($(\'[data-processor-id="';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"]\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
