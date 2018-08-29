<?php echo "<?php \n"; ?>

namespace <?= ModelBuilder\ModelBuilder::getResourceNamespace($model); ?>\Base;
use <?= ModelBuilder\ModelBuilder::getResourceNamespace($model); ?>\<?= $name; ?>ResourceQuery as Child<?= $name; ?>ResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager <?= $name; ?> resource.
 */
class <?= $name; ?>ResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name; ?>";
    }

    /**
	 * Create a new instance of a <?= $name; ?> resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return Child<?= $name; ?>ResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
    <?php foreach($model["property"] as $property) { ?>
    <?php if(in_array($property["@attributes"]["type"], ["string", "integer", "bool"])) { ?>

    /**
	 * Filter resource by the [<?= $property["@attributes"]["name"]; ?>] field.
	 * @return Child<?= $name; ?>ResourceQuery
	 */
	public function filterBy<?= ucfirst($property["@attributes"]["name"]); ?>($value, $operator = "=") {

        $this->addFilter("<?= $property["@attributes"]["name"]; ?>", $value, $operator);

		return $this;
	}
    <?php } else { ?>

    /**
	 * Embed the related [<?= $property["@attributes"]["name"]; ?>] resource.
	 * @return Child<?= $name; ?>ResourceQuery
	 */
	public function embed<?= ucfirst($property["@attributes"]["name"]); ?>() {

        $this->addEmbed("<?= $property["@attributes"]["name"]; ?>");
		return $this;
	}
    <?php } ?>
    <?php } echo PHP_EOL; ?>

    /**
	 * Save a <?= $name; ?> model or collection to the Rent Manager API.
	 * @param \<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name; ?>|\<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name; ?>[] $model
     * @return \<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name; ?>|\<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name; ?>[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a <?= $name; ?> from the Rent Manager API.
	 * @return \<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name . PHP_EOL; ?>
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a <?= $name; ?> collection from the Rent Manager API.
     * @return \<?= ModelBuilder\ModelBuilder::getModelNamespace($model); ?>\<?= $name; ?>[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}