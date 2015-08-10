<?php

namespace Prezent\GridBundle\Grid\Type;

/**
 * Translate header labels
 *
 * @see BaseColumnTypeExtension
 * @author Sander Marechal
 */
class TranslatableLabelExtension extends BaseColumnTypeExtension
{
    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'label_translation_domain' => null,
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(ColumnView $view, array $options)
    {
        $view->vars['label_translation_domain'] = $options['label_translation_domain'];
    }

    /**
     * {@inheritDoc}
     */
    public function getExtendedType()
    {
        return 'column';
    }
}