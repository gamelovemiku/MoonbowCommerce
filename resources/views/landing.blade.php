@extends('layouts.app')

@section('content')


<section class="section with-nav">
    <div id="landing">
        <div class="container">

            <div class="level">
                <div class="level-left">
                    <div>
                        <h4 class="title has-text-weight-bold">Shop</h4>
                        <p class="subtitle">สินค้าทั้งหมด</p>
                    </div>
                </div>
                <div class="level-right">
                    <b-field grouped>
                        <b-field label="การมองเห็น">
                            <b-switch v-model="showSoldOut" style="padding: 6px"> ซ่อนไอเท็มที่ขายหมดแล้ว</b-switch>
                        </b-field>
                        <b-field label="เรียงตาม">
                            <b-select v-model="sortby">
                                <option value="alphabet">ตามลำดับตัวอักษร</option>
                                <option value="bestsaler">ขายดี</option>
                            </b-select>
                        </b-field>
                    </b-field>
                </div>
            </div>

            <b-tabs vertical :expanded="true">
                <b-tab-item label="สินค้าแนะนำ" icon="information">
                    <div class="columns is-multiline">
                        @for($i = 0; $i < 3; $i++)
                        <div class="column is-2">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-square">
                                        <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" height="1" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4">ภูเขา</p>
                                            <p class="subtitle is-6">60 บาท</p>
                                            <div class="buttons">
                                                <b-button type="is-primary" outlined expanded>เพิ่มลงในตะกร้า</b-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </b-tab-item>

                <b-tab-item label="กำลังลดราคา" icon="sale">
                    <div class="columns is-multiline">
                        @for($i = 0; $i < 3; $i++)
                        <div class="column is-2">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-square">
                                        <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" height="1" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4">ภูเขา</p>
                                            <p class="subtitle is-6">60 บาท</p>
                                            <div class="buttons">
                                                <b-button type="is-primary" outlined expanded>เพิ่มลงในตะกร้า</b-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </b-tab-item>

                <b-tab-item label="สินค้ามาใหม่" icon="fire">
                    <div class="columns is-multiline">
                        @for($i = 0; $i < 3; $i++)
                        <div class="column is-2">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-square">
                                        <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" height="1" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4">ภูเขา</p>
                                            <p class="subtitle is-6">60 บาท</p>
                                            <div class="buttons">
                                                <b-button type="is-primary" outlined expanded>เพิ่มลงในตะกร้า</b-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </b-tab-item>

                <b-tab-item label="สินค้าทั้งหมด" icon="shopping">
                    <div class="columns is-multiline">
                        @for($i = 0; $i < 16; $i++)
                        <div class="column is-2">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-square">
                                        <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" height="1" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4">ภูเขา</p>
                                            <p class="subtitle is-6">60 บาท</p>
                                            <div class="buttons">
                                                <b-button type="is-primary" outlined expanded>เพิ่มลงในตะกร้า</b-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </b-tab-item>
            </b-tabs>
        </div>
    </div>
</section>
<section class="hero is-medium is-light is-bold" style="margin-top: 2rem;">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-weight-bold">
                ปลอดภัยมากขึ้นด้วย Omise
            </h1>
            <h2 class="subtitle">
                หมดปัญหาเรื่องความปลอดภัยในการชำระเงิน เราใช้ Payment Gateway จาก Omise
            </h2>
        </div>
    </div>
</section>

<script>
    new Vue({
        el: '#landing',
        data() {
            return {
                atRight: false,
                showSoldOut: false,
                sortby: 'alphabet',
            }
        }
    })
</script>

@endsection
