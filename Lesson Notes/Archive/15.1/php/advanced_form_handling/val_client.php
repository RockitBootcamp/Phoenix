<?php 

require_once('Validator.php');

$fields = [
    [
        'name' => 'email1',
        'type' => 'email',
        'error' => 'Email must contain "@"',
        'isValid' => false,
        'value' => '',
        'label' => 'Email'
    ],
    [
        'name' => 'num1',
        'type' => 'number',
        'error' => 'must contain only digits',
        'isValid' => false,
        'value' => '',
        'label' => 'Number'
    ]
];

$vf = new ValidatorFactory();

$html_inputs = [];
foreach($fields as $field_attrs) {
    $name = $field_attrs['name'];
    if(isset($_GET[$name])) {
        $value = $_GET[$name];
        $type = $field_attrs['type'];
        $field_attrs['value'] = $value;

        $validator = $vf->getValidator($type);
        $field_attrs['isValid'] = $validator->isValid($value);

    } else {
        $field_attrs['error'] = 'no input value';
    }

    $html = $field_attrs['label'] . ': <input type="text" name="' . $field_attrs['name'] . '"' .
        ' value="' . $field_attrs['value'] . '">';
    $html_inputs[]= $html;
}
?>

<html>
    <body>
        <form action="">
        <?php echo implode('<br>',$html_inputs); ?>
        <button>Try it Out!</button>
        </form>
    </body>
</html>