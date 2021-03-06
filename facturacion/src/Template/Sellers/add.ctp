<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seller $seller
 */
?>

<div  style="background: #0D1D52;">
            <ul class="nav nav-tabs">
                    <li><?= $this->Html->link(__('List Sellers'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Persons'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Person'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Voucher Headers'), ['controller' => 'VoucherHeaders', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Voucher Header'), ['controller' => 'VoucherHeaders', 'action' => 'add']) ?></li>
            </ul>
    </div>
</br>

<div class="row">
    <div class="col-md-6 col-md-offset-3">        
        <?= $this->Form->create($seller) ?>
        <fieldset>
            <legend><?= __('Add Seller') ?></legend>
            <?php
                echo $this->Form->control('person_id', ['options' => $persons]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
