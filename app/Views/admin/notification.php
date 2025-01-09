<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>Blog List<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
<div class="notifications">
    <h4>Payout Requests</h4>
    <?php
    $db = \Config\Database::connect();
    $requests = $db->table('payout_table')
        ->select('payout_table.*, student_table.student_name')
        ->join('student_table', 'student_table.student_id = payout_table.student_id')
        ->where('status', 'pending')
        ->get()
        ->getResult();
    ?>
    <?php if (!empty($requests)): ?>
        <ul>
            <?php foreach ($requests as $request): ?>
                <li>
                    <p>
                        <strong>Student:</strong> <?= $request->student_name ?> <br>
                        <strong>Amount:</strong> ₹<?= number_format($request->amount, 2) ?> <br>
                        <strong>UPI ID:</strong> <?= $request->upi_id ?> <br>
                        <button onclick="resetPayout(<?= $request->id ?>, <?= $request->amount ?>, <?= $request->student_id ?>)">
                            Reset
                        </button>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No payout requests.</p>
    <?php endif; ?>
</div>
</div>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<script type="text/javascript">
	var pageType = 'add_blog';
   
    function resetPayout(payoutId, amount, studentId) {
        if (confirm('Are you sure you want to reset this payout?')) {
            fetch('<?= base_url('admin/resetPayout') ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?= csrf_hash() ?>'
                },
                body: JSON.stringify({ payoutId, amount, studentId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Payout reset successfully.');
                    location.reload();
                } else {
                    alert('Failed to reset payout.');
                }
            });
        }
    }

</script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/custom_js/blog_list.js?v=1.0.0"></script>
<?= $this->endSection() ?>

