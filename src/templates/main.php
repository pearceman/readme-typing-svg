<!-- https://github.com/DenverCoder1/readme-typing-svg/ -->
<svg xmlns='http://www.w3.org/2000/svg'
	xmlns:xlink='http://www.w3.org/1999/xlink'
	viewBox='0 0 <?php echo "$width $height" ?>'
	width='<?php echo $width ?>px' height='<?php echo $height ?>px'>

	<?php echo preg_replace("/\n/", "\n\t", $fontCSS); ?>

<?php $previousId = "d" . (count($lines) - 1);?>
<?php for ($i = 0; $i < count($lines); ++$i): ?>
    <path id='path<?php echo $i ?>'>
        <animate id='d<?php echo $i ?>' attributeName='d' begin='<?php echo ($i == 0 ? "0s;" : "") . $previousId ?>.end' dur='5s'
            values='m0,<?php echo $height / 2 ?> h0 ; m0,<?php echo $height / 2 ?> h<?php echo $width ?> ; m0,<?php echo $height / 2 ?> h0' keyTimes='0 ; 0.8 ; 1' />
    </path>
    <text font-family='"<?php echo $font ?>", monospace' fill='<?php echo $color ?>' font-size='<?php echo $size ?>'
<?php if ($center): ?>
        x='50%' dominant-baseline='middle' text-anchor='middle'>
<?php else: ?>
        x='0%' dominant-baseline='auto' text-anchor='start'>
<?php endif;?>
        <textPath xlink:href='#path<?php echo $i ?>'>
            <?php echo $lines[$i] . "\n" ?>
        </textPath>
    </text>

<?php $previousId = "d" . $i;?>
<?php endfor;?>
</svg>
