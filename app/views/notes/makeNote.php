<div class="main make-note">
    <?php if (isset($id) && is_object($note)) : ?>
        <h2>Update note</h2>
        <?php $url = route_path. "Note/saveNote&id=".$note->id?>
    <?php else : ?>
        <h2>Make a note</h2>
        <?php $url = route_path. "Note/saveNote"?>
    <?php endif ?>
    <section class="form-note">
        <form action="<?= $url ?>" method="post">
            <label for="title">Title: </label>
            <input type="text" name="title" id="" value="<?= isset($id) && is_object($note) ? $note->title : "" ?>">
            <label for="description">Description: </label>
            <textarea name="description" id="" cols="20" rows="5"><?= isset($id) && is_object($note) ? $note->description : "" ?></textarea>
            <?php if (isset($id) && is_object($note)) : ?>
                <input type="submit" value="Update">
            <?php else : ?>
                <input type="submit" value="Save">
            <?php endif ?>
        </form>
    </section>
</div>