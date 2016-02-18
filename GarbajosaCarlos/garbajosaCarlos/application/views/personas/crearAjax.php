<?php if($status=="si"):?>
<span class="operacionOk">PERSONA INSERTADA</span>
<?php elseif ($status=="existe"):?>
<span class="operacionFallida">LA PERSONA YA EXISTE</span>
<?php else:?>
<span class="operacionFallida">ERROR</span>
<?php endif;?>



