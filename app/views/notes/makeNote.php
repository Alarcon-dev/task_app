<div class="main make-note">
    <h2>Make a note</h2>
    <section class="form-note">
        <form action="<?= route_path ?>Note/saveNote" method="post">
            <label for="title">Title: </label>
            <input type="text" name="title" id="">
            <label for="description">Description: </label>
            <textarea name="description" id="" cols="20" rows="5"></textarea>
            <input type="submit" value="Save">
        </form>
    </section>
</div>