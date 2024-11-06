<tr>
    <td>Bitcoin</td>
    <td>BTC</td>
    <td>
        <?php if($moresettings->btc == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->btc == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'btc', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'btc', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Ethereum</td>
    <td>ETH</td>
    <td>
        <?php if($moresettings->eth == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->eth == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'eth', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'eth', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Litecoin</td>
    <td>LTC</td>
    <td>
        <?php if($moresettings->ltc == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->ltc == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'ltc', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'ltc', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Chainlink</td>
    <td>LINK</td>
    <td>
        <?php if($moresettings->link == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->link == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'link', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'link', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Binance Coin</td>
    <td>BNB</td>
    <td>
        <?php if($moresettings->bnb == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->bnb == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'bnb', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'bnb', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Aave</td>
    <td>AAVE</td>
    <td>
        <?php if($moresettings->aave == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->aave == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'aave', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'aave', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Tether</td>
    <td>USDT</td>
    <td>
        <?php if($moresettings->usdt == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->usdt == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'usdt', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'usdt', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Bitcoin Cash</td>
    <td>BCH</td>
    <td>
        <?php if($moresettings->bch == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->bch == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'bch', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'bch', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Ripple</td>
    <td>XRP</td>
    <td>
        <?php if($moresettings->xrp == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->xrp == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'xrp', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'xrp', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Stellar</td>
    <td>XLM</td>
    <td>
        <?php if($moresettings->xlm == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->xlm == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'xlm', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'xlm', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <td>Ada</td>
    <td>ADA</td>
    <td>
        <?php if($moresettings->ada == 'enabled'): ?>
        <span class="badge badge-success">enabled </span>
        <?php else: ?>
        <span class="badge badge-danger">disabled</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if($moresettings->ada == 'enabled'): ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'ada', 'status'=> 'disabled'])); ?>" class="btn btn-danger btn-sm">Disable</a>
        <?php else: ?>
        <a href="<?php echo e(route('setassetstatus', ['asset' => 'ada', 'status'=> 'enabled'])); ?>" class="btn btn-success btn-sm">Enable</a>
        <?php endif; ?>
    </td>
</tr><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/Crypto/assets.blade.php ENDPATH**/ ?>