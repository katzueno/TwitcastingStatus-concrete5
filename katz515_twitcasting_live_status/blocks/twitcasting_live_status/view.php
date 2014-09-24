<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<div class='TwitcastingStatus'>
<?php
$btID = $b->getBlockTypeID();
$bt = BlockType::getByID($btID);
$uh = Loader::helper('concrete/urls');
$url = "http://twitcasting.tv/".$TwitcastingURL;
switch ( $results )
	{
	// ONLINE: Insert the HTML for online status
	case 'live':
		?>
		<a href="<?php echo $url ?>" alt="<?php echo t('It\'s live now!');?>" target="_blank">
		<img src="<?php echo $uh->getBlockTypeAssetsURL($bt,"images/twitcasting_{$ImageType}_on.gif")?>" alt="<?php echo t('It\'s live now!')?>" /></a>
<?php
	break;
	// OFFLINE: Insert the HTML for offline status
	case 'offline':
?>
		<a href="<?php echo $url ?>" alt="<?php echo t('Visit our Twitcasting page');?>" ta
rget="_blank">
		<img src="<?php echo $uh->getBlockTypeAssetsURL($bt,"images/twitcasting_{$ImageType}_off.gif")?>" alt="<?php echo t('Live stream is offline')?>" /></a>
<?php
	break;
	default:
?>
		<?php echo t('ERROR: Unable to retrieve Twitcasting channel. Please review your ID name.');
	}
?>
</div>
