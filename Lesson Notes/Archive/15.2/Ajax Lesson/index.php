<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>
    $(function() {

        $('a').on('click', function(e) {
            e.preventDefault();

            var theAnchor = this;

            var id = $(this).data('id');

            $.post('deleteUser.php', {user_id: id}, function(response) {
                $(theAnchor).remove();
            });

        });

    });
    </script>
</head>
<body>

<a href="#" data-id="4">Delete Brad</a>
<a href="#" data-id="56">Delete Daniel</a>
<a href="#" data-id="234554">Delete Brig</a>
    



</body>
</html>