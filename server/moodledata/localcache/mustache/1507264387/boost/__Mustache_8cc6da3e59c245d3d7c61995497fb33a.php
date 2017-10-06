<?php

class __Mustache_8cc6da3e59c245d3d7c61995497fb33a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<a href="#" data-action="filter-event-type" data-eventtype="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-eventtype-hidden="';
        $value = $this->resolveValue($context->find('hidden'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'hidden' inverted section
        $value = $context->find('hidden');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="calendar_event_';
            $value = $this->resolveValue($context->find('type'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section3ce74d98901b789d3d1a5bcdd76ed037($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
            $buffer .= $indent . '        <span class="eventname">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionA1af10f8d9e5921331c0cfd62627b5a7($context, $indent, $value);
            $buffer .= '</span>
';
        }
        // 'hidden' section
        $value = $context->find('hidden');
        $buffer .= $this->sectionD26959defa003439b54c9c8a8145ef90($context, $indent, $value);
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function sectionA1af10f8d9e5921331c0cfd62627b5a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hideeventtype, calendar, {{name}}';
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
                
                $buffer .= 'hideeventtype, calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ce74d98901b789d3d1a5bcdd76ed037(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/hide, core, {{#str}}hideeventtype, calendar, {{name}}{{/str}}';
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
                
                $buffer .= 'i/hide, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA1af10f8d9e5921331c0cfd62627b5a7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cdd975a5dc5ad631b91b19a2e829318(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showeventtype, calendar, {{name}}';
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
                
                $buffer .= 'showeventtype, calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdcac34012040f5d9dbe02c12254eac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/show, core, {{#str}}showeventtype, calendar, {{name}}{{/str}}';
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
                
                $buffer .= 'i/show, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0cdd975a5dc5ad631b91b19a2e829318($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD26959defa003439b54c9c8a8145ef90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="calendar_event_{{type}}">
            {{#pix}}i/show, core, {{#str}}showeventtype, calendar, {{name}}{{/str}}{{/pix}}
        </span>
        <span class="eventname">{{#str}}showeventtype, calendar, {{name}}{{/str}}</span>
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
                
                $buffer .= $indent . '        <span class="calendar_event_';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section2bdcac34012040f5d9dbe02c12254eac($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="eventname">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0cdd975a5dc5ad631b91b19a2e829318($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
