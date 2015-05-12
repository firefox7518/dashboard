<?php
/*
    All Emoncms code is released under the GNU Affero General Public License.
    See COPYRIGHT.txt and LICENSE.txt.

    ---------------------------------------------------------------------
    Emoncms - open source energy visualisation
    Part of the OpenEnergyMonitor project:
    http://openenergymonitor.org
*/

global $path, $session, $useckeditor;
?>

<style>

.greydashmenu {
    display: block;
    list-style: none outside none;
    margin: 0;
    padding: 0;
}

.greydashmenu li {
    list-style: none outside none;
    margin: 0;
    padding: 0;
    border-right: 1px solid #eee;
    float: left;
}

.greydashmenu li a {
    display: block;
    margin: 0;
    padding: 0 12px;
    border-right: 1px solid #ccc;
    text-decoration: none;
    font: 13px/27px sans-serif;
    text-transform: none;
}

</style>

<span style="float:left; color:#888; font: 13px/27px sans-serif; font-weight:bold; "><?php echo _("Dashboards:"); ?></span>

<ul class="greydashmenu">
    <?php echo $menu; ?>
</ul>

<?php if ($session['write']) { ?>

    <div align="right" style="padding:4px;">
    <?php if ($type=="view" && isset($id)) { ?>
        <a href="<?php echo $path; ?>dashboard/edit?id=<?php echo $id; ?>" ><i class="icon-edit" title="<?php echo _("Draw Editor"); ?>"></i></a>
    <?php } ?>

    <?php if ($type=="edit" && isset($id)) { ?>
        <a href="#dashConfigModal" role="button" data-toggle="modal"><i class="icon-wrench" title="<?php echo _("Configure dashboard"); ?>"></i></a>
        <a href="<?php echo $path; ?>dashboard/view?id=<?php echo $id; ?>"><i class="icon-eye-open" title="<?php echo _("View mode"); ?>"></i></a>
    <?php } ?>

	<?php if ($type=="list") { ?>
		<a onclick="$.ajax({type : 'POST',url :  path + 'dashboard/create.json  ',data : '',dataType : 'json',success : location.reload()});"><i class="icon-plus-sign" title="<?php echo _("New"); ?>" style="cursor:pointer"></i></a>
    <?php } ?>
	
	<?php if ($type!="list") { ?>
		<a href="<?php echo $path; ?>dashboard/list"><i class="icon-th-list" title="<?php echo _('List view'); ?>"></i></a>
    <?php } ?>
    </div>

<?php } 