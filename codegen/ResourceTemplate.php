<?php echo "<?php \n"; ?>

namespace <?= ModelBuilder\ModelBuilder::getResourceNamespace($model); ?>;
use <?= ModelBuilder\ModelBuilder::getResourceNamespace($model); ?>\Base\<?= $name; ?>ResourceQuery as Base<?= $name; ?>ResourceQuery;


/**
 * Rent Manager <?= $name; ?> resource.
 */
class <?= $name; ?>ResourceQuery extends Base<?= $name; ?>ResourceQuery
{

}