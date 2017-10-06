<?php

class __Mustache_aa77e37feedb775cd048a6c4296b4c3e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="bottom">
';
        // 'exportcalendarbutton' section
        $value = $context->find('exportcalendarbutton');
        $buffer .= $this->section0423d1b024d8e702de5fff1c8208dc12($context, $indent, $value);
        // 'managesubscriptionbutton' section
        $value = $context->find('managesubscriptionbutton');
        $buffer .= $this->section0423d1b024d8e702de5fff1c8208dc12($context, $indent, $value);
        // 'icalurl' section
        $value = $context->find('icalurl');
        $buffer .= $this->sectionB049c2076f0666a255ef5748e4d5b07d($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0423d1b024d8e702de5fff1c8208dc12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/single_button }}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c2af3c955505600ccccce08a833db65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' quickdownloadcalendar, calendar ';
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
                
                $buffer .= ' quickdownloadcalendar, calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB049c2076f0666a255ef5748e4d5b07d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{icalurl}}" title="{{#str}} quickdownloadcalendar, calendar {{/str}}" class="ical-link m-l-1">iCal</a>
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
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('icalurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2c2af3c955505600ccccce08a833db65($context, $indent, $value);
                $buffer .= '" class="ical-link m-l-1">iCal</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
