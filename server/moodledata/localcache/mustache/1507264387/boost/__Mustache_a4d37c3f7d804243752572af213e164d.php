<?php

class __Mustache_a4d37c3f7d804243752572af213e164d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div';
        $buffer .= ' class="calendarwrapper"';
        $buffer .= ' data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core_calendar/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core_calendar/add_event_button')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core_calendar/month_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <table id="month-detailed-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="calendarmonth calendartable card-deck m-b-0">
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '            <tr>
';
        // 'daynames' section
        $value = $context->find('daynames');
        $buffer .= $this->section721a0fcac2dabfd497e48c73a6b161eb($context, $indent, $value);
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        // 'weeks' section
        $value = $context->find('weeks');
        $buffer .= $this->sectionD905a80b76178a90f6d00b250cc594e6($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionA1664d58ef20d83a29f38c173932a220($context, $indent, $value);

        return $buffer;
    }

    private function section721a0fcac2dabfd497e48c73a6b161eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th class="header text-xs-center">
                    {{shortname}}
                </th>
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
                
                $buffer .= $indent . '                <th class="header text-xs-center">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30ad4cd62bbcce6b32c5d2ea63ba3dca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="dayblank">&nbsp;</td>
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
                
                $buffer .= $indent . '                    <td class="dayblank">&nbsp;</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCce61e3fee851e8b66112494c048a58a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today';
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
                
                $buffer .= ' today';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84f949a8191b4daaac38d5ac1997cd7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' weekend';
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
                
                $buffer .= ' weekend';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa9feca8669cbbfdc6a37548f193ebe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration';
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
                
                $buffer .= ' duration';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC090550ce065bf0ee1844d93a2f5c5bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration_{{.}}';
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
                
                $buffer .= ' duration_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbc64a4adafd3bd12488cd78e701453e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a data-action="view-day-link" href="{{viewdaylink}}" class="day" title="{{viewdaylinktitle}}">{{mday}}</a>
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
                
                $buffer .= $indent . '                                <a data-action="view-day-link" href="';
                $value = $this->resolveValue($context->find('viewdaylink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="day" title="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4dfb27af5711ab89dae28499336db6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="events-underway">[{{name}}]</li>
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
                
                $buffer .= $indent . '                                            <li class="events-underway">[';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ']</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d19b642091277914331575a6159a4d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    draggable="true"
                                                    data-drag-type="move"
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
                
                $buffer .= $indent . '                                                    draggable="true"
';
                $buffer .= $indent . '                                                    data-drag-type="move"
';
                $buffer .= $indent . '                                                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfff95a159c62965d86a2da947743483(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#underway}}
                                            <li class="events-underway">[{{name}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li class="calendar_event_{{calendareventtype}}"
                                                data-region="event-item"
                                                data-eventtype-{{calendareventtype}}="1"
                                                {{#canedit}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                {{/canedit}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}">{{name}}</a>
                                            </li>
                                        {{/underway}}
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
                
                // 'underway' section
                $value = $context->find('underway');
                $buffer .= $this->sectionA4dfb27af5711ab89dae28499336db6f($context, $indent, $value);
                // 'underway' inverted section
                $value = $context->find('underway');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <li class="calendar_event_';
                    $value = $this->resolveValue($context->find('calendareventtype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                data-region="event-item"
';
                    $buffer .= $indent . '                                                data-eventtype-';
                    $value = $this->resolveValue($context->find('calendareventtype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '="1"
';
                    // 'canedit' section
                    $value = $context->find('canedit');
                    $buffer .= $this->section7d19b642091277914331575a6159a4d9($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                                                <a data-action="view-event" data-event-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                                            </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE47ce16d8ece523181ef200bd0efeb50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div data-region="day-content">
                                    <ul>
                                        {{#events}}
                                        {{#underway}}
                                            <li class="events-underway">[{{name}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li class="calendar_event_{{calendareventtype}}"
                                                data-region="event-item"
                                                data-eventtype-{{calendareventtype}}="1"
                                                {{#canedit}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                {{/canedit}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}">{{name}}</a>
                                            </li>
                                        {{/underway}}
                                        {{/events}}
                                    </ul>
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
                
                $buffer .= $indent . '                                <div data-region="day-content">
';
                $buffer .= $indent . '                                    <ul>
';
                // 'events' section
                $value = $context->find('events');
                $buffer .= $this->sectionCfff95a159c62965d86a2da947743483($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF12fa8cfa5f6ab64a63a495e94389dbb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{viewdaylink}}" class="day" title="{{viewdaylinktitle}}">{{mday}}</a>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('viewdaylink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="day" title="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC62f7a2201393695404d52e36fb5ffe0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="clickable day text-sm-center text-md-left{{!
                            }}{{#istoday}} today{{/istoday}}{{!
                            }}{{#isweekend}} weekend{{/isweekend}}{{!
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                        }}"
                        data-day-timestamp="{{timestamp}}"
                        data-drop-zone="month-view-day"
                        data-region="day"
                        data-new-event-timestamp="{{neweventtimestamp}}">
                        <div class="hidden-sm-down text-xs-center">
                            {{#events.0}}
                                <a data-action="view-day-link" href="{{viewdaylink}}" class="day" title="{{viewdaylinktitle}}">{{mday}}</a>
                            {{/events.0}}
                            {{^events.0}}
                                {{mday}}
                            {{/events.0}}
                            {{#events.0}}
                                <div data-region="day-content">
                                    <ul>
                                        {{#events}}
                                        {{#underway}}
                                            <li class="events-underway">[{{name}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li class="calendar_event_{{calendareventtype}}"
                                                data-region="event-item"
                                                data-eventtype-{{calendareventtype}}="1"
                                                {{#canedit}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                {{/canedit}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}">{{name}}</a>
                                            </li>
                                        {{/underway}}
                                        {{/events}}
                                    </ul>
                                </div>
                            {{/events.0}}
                        </div>
                        <div class="hidden-md-up hidden-desktop">
                            {{#events.0}}
                                <a href="{{viewdaylink}}" class="day" title="{{viewdaylinktitle}}">{{mday}}</a>
                            {{/events.0}}
                            {{^events.0}}
                                <div data-region="day-content">
                                    {{mday}}
                                </div>
                            {{/events.0}}
                        </div>
                    </td>
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
                
                $buffer .= $indent . '                    <td class="clickable day text-sm-center text-md-left';
                // 'istoday' section
                $value = $context->find('istoday');
                $buffer .= $this->sectionCce61e3fee851e8b66112494c048a58a($context, $indent, $value);
                // 'isweekend' section
                $value = $context->find('isweekend');
                $buffer .= $this->section84f949a8191b4daaac38d5ac1997cd7a($context, $indent, $value);
                // 'durationevents.0' section
                $value = $context->findDot('durationevents.0');
                $buffer .= $this->section8aa9feca8669cbbfdc6a37548f193ebe($context, $indent, $value);
                // 'durationevents' section
                $value = $context->find('durationevents');
                $buffer .= $this->sectionC090550ce065bf0ee1844d93a2f5c5bc($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-day-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-drop-zone="month-view-day"
';
                $buffer .= $indent . '                        data-region="day"
';
                $buffer .= $indent . '                        data-new-event-timestamp="';
                $value = $this->resolveValue($context->find('neweventtimestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="hidden-sm-down text-xs-center">
';
                // 'events.0' section
                $value = $context->findDot('events.0');
                $buffer .= $this->sectionAbc64a4adafd3bd12488cd78e701453e($context, $indent, $value);
                // 'events.0' inverted section
                $value = $context->findDot('events.0');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                ';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                }
                // 'events.0' section
                $value = $context->findDot('events.0');
                $buffer .= $this->sectionE47ce16d8ece523181ef200bd0efeb50($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="hidden-md-up hidden-desktop">
';
                // 'events.0' section
                $value = $context->findDot('events.0');
                $buffer .= $this->sectionF12fa8cfa5f6ab64a63a495e94389dbb($context, $indent, $value);
                // 'events.0' inverted section
                $value = $context->findDot('events.0');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div data-region="day-content">
';
                    $buffer .= $indent . '                                    ';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                </div>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD905a80b76178a90f6d00b250cc594e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr data-region="month-view-week">
                {{#prepadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/prepadding}}
                {{#days}}
                    <td class="clickable day text-sm-center text-md-left{{!
                            }}{{#istoday}} today{{/istoday}}{{!
                            }}{{#isweekend}} weekend{{/isweekend}}{{!
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                        }}"
                        data-day-timestamp="{{timestamp}}"
                        data-drop-zone="month-view-day"
                        data-region="day"
                        data-new-event-timestamp="{{neweventtimestamp}}">
                        <div class="hidden-sm-down text-xs-center">
                            {{#events.0}}
                                <a data-action="view-day-link" href="{{viewdaylink}}" class="day" title="{{viewdaylinktitle}}">{{mday}}</a>
                            {{/events.0}}
                            {{^events.0}}
                                {{mday}}
                            {{/events.0}}
                            {{#events.0}}
                                <div data-region="day-content">
                                    <ul>
                                        {{#events}}
                                        {{#underway}}
                                            <li class="events-underway">[{{name}}]</li>
                                        {{/underway}}
                                        {{^underway}}
                                            <li class="calendar_event_{{calendareventtype}}"
                                                data-region="event-item"
                                                data-eventtype-{{calendareventtype}}="1"
                                                {{#canedit}}
                                                    draggable="true"
                                                    data-drag-type="move"
                                                {{/canedit}}>

                                                <a data-action="view-event" data-event-id="{{id}}" href="{{url}}">{{name}}</a>
                                            </li>
                                        {{/underway}}
                                        {{/events}}
                                    </ul>
                                </div>
                            {{/events.0}}
                        </div>
                        <div class="hidden-md-up hidden-desktop">
                            {{#events.0}}
                                <a href="{{viewdaylink}}" class="day" title="{{viewdaylinktitle}}">{{mday}}</a>
                            {{/events.0}}
                            {{^events.0}}
                                <div data-region="day-content">
                                    {{mday}}
                                </div>
                            {{/events.0}}
                        </div>
                    </td>
                {{/days}}
                {{#postpadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/postpadding}}
            </tr>
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
                
                $buffer .= $indent . '            <tr data-region="month-view-week">
';
                // 'prepadding' section
                $value = $context->find('prepadding');
                $buffer .= $this->section30ad4cd62bbcce6b32c5d2ea63ba3dca($context, $indent, $value);
                // 'days' section
                $value = $context->find('days');
                $buffer .= $this->sectionC62f7a2201393695404d52e36fb5ffe0($context, $indent, $value);
                // 'postpadding' section
                $value = $context->find('postpadding');
                $buffer .= $this->section30ad4cd62bbcce6b32c5d2ea63ba3dca($context, $indent, $value);
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1664d58ef20d83a29f38c173932a220(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core_calendar/month_view_drag_drop\',
    \'core_calendar/selectors\',
    \'core_calendar/events\',
], function(
    $,
    DragDrop,
    CalendarSelectors,
    CalendarEvents
) {
    var root = $(\'#month-detailed-{{uniqid}}\');
    DragDrop.init(root);

    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-detailed-{{uniqid}}-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-detailed-{{uniqid}}")
            .find(CalendarSelectors.eventType[data.type])
            .toggleClass(\'hidden\', !!data.hidden);
        M.util.js_complete("month-detailed-{{uniqid}}-filterChanged");
    });
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
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_calendar/month_view_drag_drop\',
';
                $buffer .= $indent . '    \'core_calendar/selectors\',
';
                $buffer .= $indent . '    \'core_calendar/events\',
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    DragDrop,
';
                $buffer .= $indent . '    CalendarSelectors,
';
                $buffer .= $indent . '    CalendarEvents
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    DragDrop.init(root);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
';
                $buffer .= $indent . '        M.util.js_pending("month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '        // A filter value has been changed.
';
                $buffer .= $indent . '        // Find all matching cells in the popover data, and hide them.
';
                $buffer .= $indent . '        $("#month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '")
';
                $buffer .= $indent . '            .find(CalendarSelectors.eventType[data.type])
';
                $buffer .= $indent . '            .toggleClass(\'hidden\', !!data.hidden);
';
                $buffer .= $indent . '        M.util.js_complete("month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
