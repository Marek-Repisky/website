<?php include 'view/header.php'; ?>
<section id='list' class="list">
    <header class="list_row_list_header">
        <h1>Assignemnts</h1>
        <form action="." method="get" id="list_header_select" 
        class="list_header_select">
            <input type="hidden" name="action" value="list_assignments">
            <select name="course_id" required>
                <option value="0">View All</option>
                <?php foreach ($courses as $course) : ?>
                <?php if ($course_id == $coursep['courseID']) { ?>
                    <option value="<?= $course['courseID'] ?>" selected>
                    <?php } else { ?>
                    <option value="<?= $course['courseID'] ?>">
                <?php } ?>
                        <? $course['courseName'] ?>
                    </option>
                    <?php endforeach; ?>
            </select>
            <button class="add-button=bold">Go</button>
        </form>
    </header>
    <?php if ($assignments) {?>
        <?php foreach ($assignments as $assignment) : ?>
        <div class="list_row">
            <div class="list_iem">
                <p class="bold"><?= $assignment['courseName'] ?></p>
                <p><?= $assignment['Description'] ?></p>
            </div>
            <div class="list_removeItem">
                <form action="." method="post">
                    <input type="hidden" name="action" 
                    value="delete_assignment">
                    <input type="hidden" name="assignment_id" 
                    value="<?=$assignment['ID'] ?>">
                    <button class="remove-button">X</button>
                </form>
            </div>
        </div>
    <?php endforeach;?>
    <?php } else { ?>
        <br>
    <?php if ($course_id) { ?>
        <p>No assignments exist for this course yet.</p>
    <?php } else { ?>
        <p>No assignments exist yet.</p>
    <?php } ?>
    <br>
    <?php } ?>
</section>
<?php include 'view/footer.php'; ?>