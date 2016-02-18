<?php if($status=="si"):?>
<span class="operacionOk">AFICION INSERTADA</span>
<?php elseif ($status=="existe"):?>
<span class="operacionFallida">LA AFICION YA EXISTE</span>
<?php else:?>
<span class="operacionFallida">ERROR</span>
<?php endif;?>



