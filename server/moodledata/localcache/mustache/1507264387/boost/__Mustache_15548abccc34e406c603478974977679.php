<?php

class __Mustache_15548abccc34e406c603478974977679 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<span class="overlay-icon-container hidden" data-region="overlay-icon-container">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</span>
';

        return $buffer;
    }
}
