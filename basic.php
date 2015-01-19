<?php defined('C5_EXECUTE') or die("Access Denied.");
if (is_array($fIDs) && count($fIDs)) :?>

<div id="easy-gallery-<?php echo $bID?>">

<?php foreach ($fIDs as $key => $fID) :

    $f = File::getByID($fID);
    if(!is_object($f)) continue;

    $galleryHasImage = true;
    $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('file_manager_detail');
    $thumbnailUrl = $f->getThumbnailURL($type->getBaseVersion());

    ?>
    <div class="col-md-<?php echo $options->galleryColumns?>">
        <img src="<?php echo $thumbnailUrl ?>" alt="<?php echo $f->getTitle() ?>">
        <p><?php echo $f->getTitle() ?></p>
        <small><?php echo $f->getDescription() ?></small>
    </div>
<?php endforeach ?>
</div><!-- .easy-gallery -->
<?php endif ?>
