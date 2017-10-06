<?php

class __Mustache_5b84307c7fa7f0ea3c35f4c360ce689d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="header">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('filter_selector'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('new_event_button'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        if ($partial = $this->mustache->loadPartial('core_calendar/day_navigation')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('core_calendar/event_list')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
