<h3>Fornecedor</h3>




<?php if(isset($fornecedores)): ?>
    Fornecedor: <?php echo e($fornecedores[1]['nome']); ?>

    <br>
    Status: <?php echo e($fornecedores[1]['status']); ?>

    <br>
    CNPJ: <?php echo e($fornecedores[1]['cnpj'] ?? ''); ?>

    <br>
    Telefone: (<?php echo e($fornecedores[1]['ddd'] ?? ''); ?>) <?php echo e($fornecedores[1]['telefone'] ?? ''); ?>

    <?php switch($fornecedores[1]['ddd']):
        case ('11'): ?>
            São Paulo - SP
            <?php break; ?>
        <?php case ('32'): ?>
            Juiz de Fora - MG
            <?php break; ?>
        <?php case ('85'): ?>
            Fortaleza - CE
            <?php break; ?>
        <?php default: ?>
            Estado não identificado.
    <?php endswitch; ?>
<?php endif; ?>
<?php /**PATH D:\Meus repositórios github\app_super_gestao\resources\views/app/fornecedor/index.blade.php ENDPATH**/ ?>