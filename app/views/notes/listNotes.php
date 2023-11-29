
    <?php if (isset($notes) && is_object($notes)) : ?>
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
                    <td><?= $not->title?></td>
                    <td><?= $not->description?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <h1>You don't have notes</h1>
    <?php endif; ?>
