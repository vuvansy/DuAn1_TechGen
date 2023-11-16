<?php
get_header();
?>
<main>
  <div class="main-wrapper">
    <?php
    get_sidebar();
    ?>
    <div class="sidebar-right">
      <section id="user">
        <div>
          <div class="user__top">
            <h2 class="user__heading">Xoá khách hàng</h2>
            <div class="user__actions">
              <a href="?mod=users&action=index" class="user-btn-list">Danh sách</a>
              <a href="?mod=users&action=add" class="user-btn-add">Thêm mới</a>
            </div>
          </div>
          <div class="user__content">
            <h3 class="user__title">
              Xoá khách hàng
            </h3>
            <p class="user__description" style="padding: 2rem;"><?php if (!empty($data)) echo $message ?></p>
          </div>
        </div>
      </section>
    </div>
</main>
</div>
</div>

</main>
<?php
get_footer();
?>
