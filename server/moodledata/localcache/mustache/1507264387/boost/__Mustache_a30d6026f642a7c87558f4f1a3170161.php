<?php

class __Mustache_a30d6026f642a7c87558f4f1a3170161 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        if ($partial = $this->mustache->loadPartial('core_admin/setting_configfile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
