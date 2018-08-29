<?php global $namespace, $baseClass, $modelName, $properties, $resourceUrl; ?>
<?php echo "<?php \n\n"; ?>
namespace <?= $namespace; ?>\Base;
use <?= $baseClass; ?> as BaseModel;

/**
 * <?= $modelName; ?> base class.
 */
class <?= $modelName; ?> extends BaseModel
{

    protected static $types = [
        <?php foreach($properties as $property) { ?>
        "<?= $property->attributes()->name; ?>" => "<?= $property->attributes()->type; ?>",
        <?php } ?>
    ];

    #region Getters/Setters

    <?php foreach($properties as $property) { ?>

    /**
	 * Get the [<?= $property->attributes()->name; ?>] field.
	 * @return <?= $property->attributes()->type . PHP_EOL; ?>
	 */
	public function get<?= ucfirst($property->attributes()->name); ?>() {
		return $this->container['<?= $property->attributes()->name; ?>'];
	}

	/**
	 * Set the [<?= $property->attributes()->name; ?>] field.
	 * @param <?= $property->attributes()->type; ?> $<?= $property->attributes()->name . PHP_EOL; ?>
	 */
	public function set<?= ucfirst($property->attributes()->name); ?>($<?= $property->attributes()->name; ?>) {
		$this->container['<?= $property->attributes()->name; ?>'] = $<?= $property->attributes()->name; ?>;
	}

    <?php } ?>

    #endregion
}