<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.0/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        const buttonConfig = [
            { extend: 'copy', className: 'btn btn-outline-light me-1' },
            { extend: 'csv', className: 'btn btn-outline-light me-1' },
            { extend: 'excel', className: 'btn btn-outline-light me-1' },
            { extend: 'pdf', className: 'btn btn-outline-light me-1' }
            <?php if (isset($showAddStudentButton) && $showAddStudentButton): ?>,
            {
                text: '<i class="bi bi-person-add" title="Add student"></i>',
                className: 'btn btn-outline-light me-1',
                action: function () {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'addStudent.php';
                    document.body.appendChild(form);
                    form.submit();
                }
            }
            <?php endif; ?>
        ];

        $('#datatable').DataTable({
            dom: 'Bflrtip',
            buttons: buttonConfig
        });
    });
</script>

</body>

</html>