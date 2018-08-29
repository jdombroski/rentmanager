<?php echo "<?php \n\n"; ?>
namespace <?= $namespace; ?>\Base;
use <?= $baseClass; ?> as BaseModel;
use DateTime;

/**
 * <?= $name; ?> base class.
 */
class <?= $name; ?> extends BaseModel
{

    protected static $types = [
        <?php foreach($model["property"] as $property) { ?>
        "<?= $property["@attributes"]["name"]; ?>" => "<?= $property["@attributes"]["type"]; ?>",
        <?php } ?>
    ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
        <?php foreach($model["property"] as $property) { if(isset($property["@attributes"]["key"])) { ?>
        return isset($this->container['<?= $property["@attributes"]["name"]; ?>']) ? $this->container['<?= $property["@attributes"]["name"]; ?>'] : null;
        <?php break ; } } echo PHP_EOL; ?>
    }


    #region Getters/Setters

    <?php foreach($model["property"] as $property) { ?>

    /**
	 * Get the [<?= $property["@attributes"]["name"]; ?>] field.
	 * @return <?= $property["@attributes"]["type"] . PHP_EOL; ?>
	 */
	public function get<?= ucfirst($property["@attributes"]["name"]); ?>() {
		return isset($this->container['<?= $property["@attributes"]["name"]; ?>']) ? $this->container['<?= $property["@attributes"]["name"]; ?>'] : null;
	}

	/**
	 * Set the [<?= $property["@attributes"]["name"]; ?>] field.
	 * @param <?= $property["@attributes"]["type"]; ?> $<?= $property["@attributes"]["name"] . PHP_EOL; ?>
	 */
	public function set<?= ucfirst($property["@attributes"]["name"]); ?>($<?= $property["@attributes"]["name"]; ?>) {
		$this->container['<?= $property["@attributes"]["name"]; ?>'] = $<?= $property["@attributes"]["name"]; ?>;
	}

    <?php } ?>

    #endregion
}