<?php global $namespace, $baseClass, $modelName, $properties; ?>
<?php echo "<?php \n\n"; ?>
namespace <?= $namespace; ?>;
use <?= $namespace; ?>\Base\<?= $modelName; ?> as Base<?= $modelName; ?>;

/**
 * <?= $modelName; ?> skeleton class.
 */
class <?= $modelName; ?> extends Base<?= $modelName . PHP_EOL; ?>
{

}