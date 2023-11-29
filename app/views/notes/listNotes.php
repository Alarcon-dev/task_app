<div class="main noteList">
    <?php if (isset($notes) && $notes->num_rows):?>
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Options</th>
            </tr>
            <?php while ($not = $notes->fetch_object()) : ?>
                <tr>
                    <td><?= $not->id ?></td>
                    <td><?= $not->title ?></td>
                    <td><?= $not->description ?></td>
                    <td>
                        <a class="button1" href="<?= route_path ?>Note/updateNotes&id=<?=$not->id?>">Editar</a>
                        <a class="button2" href="<?= route_path ?>Note/deleteNote&id=<?= $not->id ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <h1>You don't have notes</h1>
    <?php endif; ?>
</div>