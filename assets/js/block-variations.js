/**
 * Register block variations.
 * 
 * @link https://developer.wordpress.org/themes/features/block-variations/
 */

const { registerBlockVariation } = wp.blocks;
const { __ } = wp.i18n;

registerBlockVariation('core/spacer', {
    name: 'gemma/spacer',
    attributes: {
        height: 'var:preset|spacing|60'
    },
    isDefault: true,
    isActive: (blockAttributes) =>
        blockAttributes.height && 'var:preset|spacing|60' === blockAttributes.height
});