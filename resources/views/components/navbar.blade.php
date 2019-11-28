<div id="navbar">
    <template>
        <div class="container">
            <b-navbar class="is-spaced" type="is-white">
                <template slot="brand">
                    <b-navbar-item tag="router-link" :to="{ path: '/' }">
                        <div>
                            <small style="font-size: 9px;">MOONBOW's</small><br/>
                            <div style="margin-top: -12px;">eCommerce</div>
                        </div>
                    </b-navbar-item>
                </template>
                <template slot="start">
                    <b-navbar-item href="#">
                        <i class="fas fa-shopping-bag" style="margin-right: 8px; margin-top: -4px;"></i> ร้านค้า
                    </b-navbar-item>
                    <b-navbar-dropdown label="หมวดหมู่สินค้า">
                        <b-navbar-item href="#">
                            ทั่วไป
                        </b-navbar-item>
                        <b-navbar-item href="#">
                            อุปกรณ์พกพา
                        </b-navbar-item>
                        <b-navbar-item href="#">
                            เครื่องใช้ไฟฟ้า
                        </b-navbar-item>
                    </b-navbar-dropdown>
                </template>

                <template slot="end">
                    <b-navbar-item tag="div">
                        <div class="buttons">
                            <a class="button is-primary">
                                สมัครสมาชิก
                            </a>
                            <a class="button is-light">
                                เข้าสู่ระบบ
                            </a>
                        </div>
                    </b-navbar-item>
                </template>
            </b-navbar>
        </div>
    </template>
</div>

<script>
    new Vue({
        el: '#navbar'
    })
</script>
