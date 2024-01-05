  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

    $(document).ready(function () {
        $('.HeartButton').on('click', function () {
            var productId = $(this).data('product-id');
            console.log('11111111111111');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/heart-product',
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: {
                    // Include the product ID in the request data
                    product_id: productId
                },
                success: function (response) {
                    // Handle the success response
                    alert(response.message); // Convert JSON to string
                },
            });
        });


        $('.likeButton').on('click', function () {
            var productId = $(this).data('product-id');
            console.log('11111111111111');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/like-product',
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: {
                    // Include the product ID in the request data
                    product_id: productId
                },
                success: function (response) {
                    // Handle the success response
                    alert(response.message); // Convert JSON to string
                },
            });
        });



    });
</script>
