<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#rasa').on('change', function() {
            var id = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/pemesanan/get/'+id,
                dataType: 'json',
                success:function(data){
                    $('#produk_id').val(data.id);
                    $('#harga').val(data.harga_jual);
                }
            });
        });
    });
</script>