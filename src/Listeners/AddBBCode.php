<?php
namespace oe800\BBCodeBars\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {



$event->configurator->BBCodes->addCustom(
            '[PBAR]{TEXT},{TEXT2},{COLOR},{COLOR2},{COLOR3},{NUMBER},{NUMBER2},{NUMBER3}[/PBAR]',
'<h1>{TEXT}</h1>
    <div class="arrow" style="border: {NUMBER}px solid {COLOR};border-radius:{NUMBER3}px">
     <div class="arrow-status" style="width: {NUMBER2}%; background-color: {COLOR2};border-bottom-left-radius: {NUMBER3}px; border-top-left-radius: {NUMBER3}px;border-right: 0.5em solid {COLOR3}">
       <span class="arrow-pointer">{TEXT2}</span>
    </div>
    </div>'

);



    }
}
