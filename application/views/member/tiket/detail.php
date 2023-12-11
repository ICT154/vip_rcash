<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url("tiket") ?>" class="btn btn-primary mb-3"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"><i class="fas fa-info-circle"></i> Informasi</h4>
            </div>
            <div class="card-body pb-4">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fw-bold">Subjek</span><br>
                                    <?= $data_tiket['subjek'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Tipe</span><br>
                                    <?= $data_tiket['tipe'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Status</span><br>
                                    <?php
                                    if ($data_tiket['status'] == "0") {
                                        echo "<span class='btn btn-sm btn-warning'><i class='fas fa-clock fs-6 me-2'></i> Pending</span>";
                                    } elseif ($data_tiket['status'] == "1") {
                                        echo "<span class='btn btn-sm btn-success'><i class='fas fa-check-circle fs-6 me-2'></i> Answered</span>";
                                    } elseif ($data_tiket['status'] == "Error") {
                                        echo "<span class='btn btn-sm btn-danger'><i class='fas fa-times-circle fs-6 me-2'></i> Error</span>";
                                    }
                                    ?>
                                    <!-- <span class="btn btn-sm btn-primary"><i class="fas fa-check-circle fs-6 me-2"></i> Answered</span> -->
                                </td>
                            </tr>
                            <tr class="x-chats">
                                <td>
                                    <span class="fw-bold">Tiket Dibuat</span><br>
                                    <?= $this->GZL->format_tanggal($data_tiket['date_g']) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 mt-3">
        <style>
            .avatar {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .avatar .avatar-img {
                max-width: 100%;
                height: auto;
            }

            .avatar,
            .avatar .avatar-img,
            .avatar .avatar-text {
                border-radius: 50%;
            }

            .avatar .avatar-text {
                background: #2787f5;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                color: #fff;
                line-height: 0;
                height: 100%;
                width: 100%;
            }

            .avatar:hover .avatar-text {
                background: #1d82f5;
            }

            .avatar {
                height: 44px;
                width: 44px;
            }

            .avatar>.avatar-text {
                font-size: 15.1724137931px;
            }

            .avatar-group .avatar+.avatar {
                margin-left: -17.6px;
            }

            .avatar-xl {
                height: 82px;
                width: 82px;
            }

            .avatar-xl>.avatar-text {
                font-size: 28.275862069px;
            }

            .avatar-group .avatar-xl+.avatar-xl {
                margin-left: -32.8px;
            }

            .avatar-lg {
                height: 68px;
                width: 68px;
            }

            .avatar-lg>.avatar-text {
                font-size: 23.4482758621px;
            }

            .avatar-group .avatar-lg+.avatar-lg {
                margin-left: -27.2px;
            }

            .avatar-sm {
                height: 34px;
                width: 34px;
            }

            .avatar-sm>.avatar-text {
                font-size: 11.724137931px;
            }

            .avatar-group .avatar-sm+.avatar-sm {
                margin-left: -13.6px;
            }

            .avatar-xs {
                height: 26px;
                width: 26px;
            }

            .avatar-xs>.avatar-text {
                font-size: 8.9655172414px;
            }

            .avatar-group .avatar-xs+.avatar-xs {
                margin-left: -10.4px;
            }

            .avatar-text>svg {
                height: 1em;
                width: 1em;
            }

            .avatar-offline .avatar-img,
            .avatar-offline .avatar-text,
            .avatar-online .avatar-img,
            .avatar-online .avatar-text {
                -webkit-mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCA0NiA0NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDYgNDYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZmlsbD0iI0ZGMDAwMCIgZD0iTTM5LjUsMTNjLTMuNTg5ODQzOCwwLTYuNS0yLjkxMDE1NjMtNi41LTYuNVMzNS45MTAxNTYzLDAsMzkuNSwwSDB2NDZoNDZWNi41DQoJCUM0NiwxMC4wODk4NDM4LDQzLjA4OTg0MzgsMTMsMzkuNSwxM3oiLz4NCgk8cGF0aCBmaWxsPSIjRkYwMDAwIiBkPSJNMzkuNSwwQzQzLjA4OTg0MzgsMCw0NiwyLjkxMDE1NjMsNDYsNi41VjBIMzkuNXoiLz4NCjwvZz4NCjwvc3ZnPg0K);
                mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCA0NiA0NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDYgNDYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZmlsbD0iI0ZGMDAwMCIgZD0iTTM5LjUsMTNjLTMuNTg5ODQzOCwwLTYuNS0yLjkxMDE1NjMtNi41LTYuNVMzNS45MTAxNTYzLDAsMzkuNSwwSDB2NDZoNDZWNi41DQoJCUM0NiwxMC4wODk4NDM4LDQzLjA4OTg0MzgsMTMsMzkuNSwxM3oiLz4NCgk8cGF0aCBmaWxsPSIjRkYwMDAwIiBkPSJNMzkuNSwwQzQzLjA4OTg0MzgsMCw0NiwyLjkxMDE1NjMsNDYsNi41VjBIMzkuNXoiLz4NCjwvZz4NCjwvc3ZnPg0K);
                -webkit-mask-size: 100% 100%;
                mask-size: 100% 100%;
            }

            .avatar-offline::before,
            .avatar-online::before {
                position: absolute;
                border-radius: 50%;
                display: block;
                content: "";
                height: 18%;
                width: 18%;
                top: 5%;
                right: 5%;
            }

            .avatar-online::before {
                background: #ffc107;
            }

            .avatar-offline::before {
                background: #adb5bd;
            }

            .avatar-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .avatar-group .avatar:not(:last-child) {
                -webkit-mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTAwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTAwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNTQsNTBDNTQsMjcuODAyNDI5Miw2Ny4xNTc0NzA3LDguNjg5NzU4Myw4Ni4wOTIxNjMxLDBIMHYxMDBoODYuMDkyMTYzMUM2Ny4xNTc0NzA3LDkxLjMxMDI0MTcsNTQsNzIuMTk3NTcwOCw1NCw1MHoiLz4NCjwvc3ZnPg0K);
                mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTAwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTAwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNTQsNTBDNTQsMjcuODAyNDI5Miw2Ny4xNTc0NzA3LDguNjg5NzU4Myw4Ni4wOTIxNjMxLDBIMHYxMDBoODYuMDkyMTYzMUM2Ny4xNTc0NzA3LDkxLjMxMDI0MTcsNTQsNzIuMTk3NTcwOCw1NCw1MHoiLz4NCjwvc3ZnPg0K);
                -webkit-mask-size: 100% 100%;
                mask-size: 100% 100%;
            }

            .avatar-group-trigon {
                position: relative;
                height: 71.0776px;
                width: 71.0776px;
            }

            .avatar-group-trigon .avatar {
                position: absolute;
            }

            .avatar-group-trigon .avatar:nth-child(1) {
                top: 0;
                left: 50%;
                -webkit-transform: translate(-50%, 0);
                transform: translate(-50%, 0);
                -webkit-mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDI2IDI2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyNiAyNjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCgkuc3Qwe2Rpc3BsYXk6bm9uZTt9DQoJLnN0MXtmaWxsOiMwMDAwRkY7fQ0KPC9zdHlsZT4NCjxnIGlkPSLQodC70L7QuV8yIj4NCjwvZz4NCjxnIGlkPSLQodC70L7QuV8xIj4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNC41LDEzLjM5OTk5OTZjMy4wOTk5OTk5LDAsNiwxLjEwMDAwMDQsOC4zMDAwMDAyLDNjMi4xOTk5OTk4LTEuODAwMDAwMiw1LjA5OTk5OTQtMyw4LjMwMDAwMDItMw0KCQljMS43OTk5OTkyLDAsMy41LDAuMzk5OTk5Niw1LDFWLTFIMHYxNS4xOTk5OTk4QzEuNCwxMy42OTk5OTk4LDIuOTAwMDAwMSwxMy4zOTk5OTk2LDQuNSwxMy4zOTk5OTk2eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik01LDE0YzMuMDIwMzg1NywwLDUuNzkyOTA3NywxLjAzOTMwNjYsOCwyLjc2NzI3MjlDMTUuMjA3MDkyMywxNS4wMzkzMDY2LDE3Ljk3OTYxNDMsMTQsMjEsMTQNCgkJYzEuNzcyMzM4OSwwLDMuNDYwNDQ5MiwwLjM1NzM2MDgsNSwwLjk5OTU3MjhWMEgwdjE0Ljk5OTU3MjhDMS41Mzk1NTA4LDE0LjM1NzM2MDgsMy4yMjc2NjExLDE0LDUsMTR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==);
                mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDI2IDI2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyNiAyNjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCgkuc3Qwe2Rpc3BsYXk6bm9uZTt9DQoJLnN0MXtmaWxsOiMwMDAwRkY7fQ0KPC9zdHlsZT4NCjxnIGlkPSLQodC70L7QuV8yIj4NCjwvZz4NCjxnIGlkPSLQodC70L7QuV8xIj4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNC41LDEzLjM5OTk5OTZjMy4wOTk5OTk5LDAsNiwxLjEwMDAwMDQsOC4zMDAwMDAyLDNjMi4xOTk5OTk4LTEuODAwMDAwMiw1LjA5OTk5OTQtMyw4LjMwMDAwMDItMw0KCQljMS43OTk5OTkyLDAsMy41LDAuMzk5OTk5Niw1LDFWLTFIMHYxNS4xOTk5OTk4QzEuNCwxMy42OTk5OTk4LDIuOTAwMDAwMSwxMy4zOTk5OTk2LDQuNSwxMy4zOTk5OTk2eiIvPg0KCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik01LDE0YzMuMDIwMzg1NywwLDUuNzkyOTA3NywxLjAzOTMwNjYsOCwyLjc2NzI3MjlDMTUuMjA3MDkyMywxNS4wMzkzMDY2LDE3Ljk3OTYxNDMsMTQsMjEsMTQNCgkJYzEuNzcyMzM4OSwwLDMuNDYwNDQ5MiwwLjM1NzM2MDgsNSwwLjk5OTU3MjhWMEgwdjE0Ljk5OTU3MjhDMS41Mzk1NTA4LDE0LjM1NzM2MDgsMy4yMjc2NjExLDE0LDUsMTR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==);
                -webkit-mask-size: 100% 100%;
                mask-size: 100% 100%;
            }

            .avatar-group-trigon .avatar:nth-child(2) {
                bottom: 0;
                left: 0;
                -webkit-mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAyNiAyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjYgMjY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGQ9Ik0xNC4xLDEzYzAtNS45LDMuNC0xMC45LDguMi0xM0gwdjI2aDIyLjNDMTcuNSwyMy45LDE0LjEsMTguOSwxNC4xLDEzeiIvPg0KPC9zdmc+DQo=);
                mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAyNiAyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjYgMjY7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGQ9Ik0xNC4xLDEzYzAtNS45LDMuNC0xMC45LDguMi0xM0gwdjI2aDIyLjNDMTcuNSwyMy45LDE0LjEsMTguOSwxNC4xLDEzeiIvPg0KPC9zdmc+DQo=);
                -webkit-mask-size: 100% 100%;
                mask-size: 100% 100%;
            }

            .avatar-group-trigon .avatar:nth-child(3) {
                bottom: 0;
                right: 0;
            }

            .avatar-group-trigon-xs {
                height: 42.0004px;
                width: 42.0004px;
            }

            .avatar-group-trigon-sm {
                height: 54.9236px;
                width: 54.9236px;
            }

            .avatar-group-trigon-lg {
                height: 109.8472px;
                width: 109.8472px;
            }

            .avatar-group-trigon-xl {
                height: 132.4628px;
                width: 132.4628px;
            }

            .avatar-responsive.avatar,
            .avatar-responsive.avatar.avatar-lg,
            .avatar-responsive.avatar.avatar-sm,
            .avatar-responsive.avatar.avatar-xl,
            .avatar-responsive.avatar.avatar-xs {
                height: 26px;
                width: 26px;
            }

            @media (min-width: 576px) {

                .avatar-responsive.avatar,
                .avatar-responsive.avatar.avatar-lg,
                .avatar-responsive.avatar.avatar-sm,
                .avatar-responsive.avatar.avatar-xl {
                    height: 34px;
                    width: 34px;
                }
            }

            @media (min-width: 768px) {

                .avatar-responsive.avatar,
                .avatar-responsive.avatar.avatar-lg,
                .avatar-responsive.avatar.avatar-xl {
                    height: 44px;
                    width: 44px;
                }
            }

            @media (min-width: 992px) {

                .avatar-responsive.avatar.avatar-lg,
                .avatar-responsive.avatar.avatar-xl {
                    height: 68px;
                    width: 68px;
                }
            }

            @media (min-width: 1200px) {
                .avatar-responsive.avatar.avatar-xl {
                    height: 82px;
                    width: 82px;
                }
            }

            .icon {
                display: inline-block;
                line-height: 1;
            }

            .icon.icon-badged {
                position: relative;
            }

            .icon.icon-badged>svg {
                -webkit-mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNCAxNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTQgMTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGQ9Ik03LDAuNUM3LDAuMyw3LDAuMiw3LDBIMHYxNGgxNFY3Yy0wLjIsMC0wLjMsMC0wLjUsMEM5LjksNyw3LDQuMSw3LDAuNXoiLz4NCjwvc3ZnPg0K);
                mask-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0i0KHQu9C+0LlfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNCAxNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTQgMTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGQ9Ik03LDAuNUM3LDAuMyw3LDAuMiw3LDBIMHYxNGgxNFY3Yy0wLjIsMC0wLjMsMC0wLjUsMEM5LjksNyw3LDQuMSw3LDAuNXoiLz4NCjwvc3ZnPg0K);
                -webkit-mask-size: 100% 100%;
                mask-size: 100% 100%;
            }

            .icon.icon-badged .badge {
                position: absolute;
                bottom: 60%;
                left: 60%;
            }

            .icon>svg {
                height: 1rem;
                width: 1rem;
            }

            .icon-xl>svg {
                height: 1.5rem;
                width: 1.5rem;
            }

            .icon-lg>svg {
                height: 1.125rem;
                width: 1.125rem;
            }

            .icon-sm>svg {
                height: 0.875rem;
                width: 0.875rem;
            }

            .icon-xs>svg {
                height: 0.75rem;
                width: 0.75rem;
            }

            .message+.message {
                margin-top: 1rem;
            }

            @media (min-width: 992px) {
                .message+.message {
                    margin-top: 1.5rem;
                }
            }

            .message-divider {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
                text-align: center;
            }

            @media (min-width: 992px) {
                .message-divider {
                    margin-top: 2rem;
                    margin-bottom: 2rem;
                }
            }

            .message {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: end;
                -ms-flex-align: end;
                align-items: flex-end;
            }

            .message.message-out {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .message-inner {
                margin-left: 0.5rem;
            }

            @media (min-width: 768px) {
                .message-inner {
                    margin-left: 1rem;
                }
            }

            .message-out .message-inner {
                margin-left: 0;
                margin-right: 0.5rem;
            }

            @media (min-width: 768px) {
                .message-out .message-inner {
                    margin-right: 1rem;
                }
            }

            .message-content {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .message-content+.message-content {
                margin-top: 0.75rem;
            }

            .message-out .message-content {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .message-gallery,
            .message-text {
                overflow: hidden;
                margin-right: 0.25rem;
            }

            .message-out .message-gallery,
            .message-out .message-text {
                margin-left: 0.25rem;
                margin-right: 0;
            }

            .message-text {
                background: #3ec9d6;
                border-radius: 0.6rem;
                padding: 1rem 1.25rem;
                color: #95aac9;
            }

            .message-out .message-text {
                background: var(--bs-primary);
                border-radius: 0.6rem;
                color: #fff;
            }

            .message-content:not(:last-child) .message-text {
                border-bottom-left-radius: 0.25rem;
            }

            .message-out .message-content:not(:last-child) .message-text {
                border-bottom-left-radius: 0.6rem;
                border-bottom-right-radius: 0.25rem;
            }

            .message-content:not(:first-child) .message-text {
                border-top-left-radius: 0.15rem;
            }

            .message-out .message-content:not(:first-child) .message-text {
                border-top-left-radius: 0.6rem;
                border-top-right-radius: 0.15rem;
            }

            .message-footer {
                line-height: 1.3;
                margin-top: 0.25rem;
            }

            .message-out .message-footer {
                text-align: right;
            }

            .message-inner {
                max-width: 100%;
                min-width: 0;
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }

            @media (min-width: 992px) {
                .message-inner {
                    max-width: 70%;
                }
            }

            @media (min-width: 1200px) {
                .message-inner {
                    max-width: 50%;
                }
            }

            @media (min-width: 1440px) {
                .message-inner {
                    max-width: 45%;
                }
            }

            .stretched-link-up {
                z-index: 2;
            }

            .border-outline {
                -webkit-box-shadow: 0 0 0 2px #fff;
                box-shadow: 0 0 0 2px #fff;
            }

            .border-outline.border-1 {
                -webkit-box-shadow: 0 0 0 1px #fff !important;
                box-shadow: 0 0 0 1px #fff !important;
            }

            .border-outline.border-2 {
                -webkit-box-shadow: 0 0 0 2px #fff !important;
                box-shadow: 0 0 0 2px #fff !important;
            }

            .border-outline.border-3 {
                -webkit-box-shadow: 0 0 0 3px #fff !important;
                box-shadow: 0 0 0 3px #fff !important;
            }

            .border-outline.border-4 {
                -webkit-box-shadow: 0 0 0 4px #fff !important;
                box-shadow: 0 0 0 4px #fff !important;
            }

            .border-outline.border-5 {
                -webkit-box-shadow: 0 0 0 5px #fff !important;
                box-shadow: 0 0 0 5px #fff !important;
            }

            .border-outline.border-primary {
                -webkit-box-shadow: 0 0 0 2px #2787f5 !important;
                box-shadow: 0 0 0 2px #2787f5 !important;
            }

            .border-outline.border-secondary {
                -webkit-box-shadow: 0 0 0 2px #d9e4f0 !important;
                box-shadow: 0 0 0 2px #d9e4f0 !important;
            }

            .border-outline.border-success {
                -webkit-box-shadow: 0 0 0 2px #ecad8f !important;
                box-shadow: 0 0 0 2px #ecad8f !important;
            }

            .border-outline.border-info {
                -webkit-box-shadow: 0 0 0 2px #17a2b8 !important;
                box-shadow: 0 0 0 2px #17a2b8 !important;
            }

            .border-outline.border-warning {
                -webkit-box-shadow: 0 0 0 2px #ffc107 !important;
                box-shadow: 0 0 0 2px #ffc107 !important;
            }

            .border-outline.border-danger {
                -webkit-box-shadow: 0 0 0 2px #fe6571 !important;
                box-shadow: 0 0 0 2px #fe6571 !important;
            }

            .border-outline.border-light {
                -webkit-box-shadow: 0 0 0 2px #f6f9fb !important;
                box-shadow: 0 0 0 2px #f6f9fb !important;
            }

            .border-outline.border-dark {
                -webkit-box-shadow: 0 0 0 2px #ebf1f7 !important;
                box-shadow: 0 0 0 2px #ebf1f7 !important;
            }

            .border-outline.border-white {
                -webkit-box-shadow: 0 0 0 2px #fff !important;
                box-shadow: 0 0 0 2px #fff !important;
            }

            .flex-1 {
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }

            .hide-empty:empty {
                display: none;
            }

            [data-horizontal-scroll] {
                overflow-x: scroll !important;
            }

            [data-horizontal-scroll] {
                -ms-overflow-style: none;
                scrollbar-width: none;
                overflow-y: auto;
                overflow-x: hidden;
            }

            [data-horizontal-scroll]::-webkit-scrollbar {
                display: none;
            }

            .hide-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
                overflow-y: auto;
                overflow-x: hidden;
            }

            .hide-scrollbar::-webkit-scrollbar {
                display: none;
            }

            .emoji-picker {
                width: calc(var(--emoji-per-row) * var(--emoji-size) + (0.75rem * var(--emoji-per-row)) + (0.75rem * 2) + var(--emoji-per-row) * 1px + (2px * 2));
                overflow: hidden;
                background: #fff;
                background: 0 0;
                padding: 0 0.75rem;
                border-radius: 0.6rem;
                -webkit-box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.05);
                box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.05);
                position: relative;
            }

            .emoji-picker:before {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.9);
                -webkit-backdrop-filter: blur(10px) saturate(200%);
                backdrop-filter: blur(10px) saturate(200%);
                content: "";
                display: block;
            }

            @-moz-document url-prefix() {
                .emoji-picker::before {
                    background: #fff;
                }
            }

            .emoji-picker__variant-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .emoji-picker__variant-popup {
                position: absolute;
                width: 100%;
                bottom: 0;
                left: 0;
                background: #fff;
                border-top: 2px solid #f5f8fb;
                padding: 0.75rem;
                margin-top: 0.75rem;
            }

            .emoji-picker {
                position: relative;
                margin-bottom: 1.5rem;
            }

            .emoji-picker__emoji {
                background: 0 0;
                border: none;
                outline: 0 !important;
                cursor: pointer;
                overflow: hidden;
                font-size: var(--emoji-size);
                width: calc(var(--emoji-size) + 0.75rem);
                height: calc(var(--emoji-size) + 0.75rem);
                padding: 0;
                margin: 0 1px 0 0;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                border-radius: 0.6rem;
            }

            .emoji-picker__emoji:focus,
            .emoji-picker__emoji:hover {
                background: #dfedfe;
            }

            .emoji-picker__category-name {
                font-weight: 400;
                font-size: 0.875em;
                color: #bfccdf;
                padding: 12px 0;
                margin: 0;
            }

            .emoji-picker__emojis {
                height: calc(var(--row-count) * var(--emoji-size) + (0.75rem * var(--row-count)));
                overflow-y: auto;
                position: relative;
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }

            .emoji-picker__emojis {
                -ms-overflow-style: none;
                scrollbar-width: none;
                overflow-y: auto;
                overflow-x: hidden;
            }

            .emoji-picker__emojis::-webkit-scrollbar {
                display: none;
            }

            .emoji-picker__preview {
                height: calc(var(--emoji-size) * 2 + (0.75rem * 2));
                padding: 0.75rem 0;
                border-top: 2px solid #f5f8fb;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .emoji-picker__preview .emoji-picker__preview-emoji {
                font-size: calc(var(--emoji-size) * 1.4);
                margin-right: 0.5rem;
            }

            .emoji-picker__preview .emoji-picker__preview-name {
                text-transform: capitalize;
                font-size: 0.875em;
                color: #bfccdf;
                display: none;
            }

            .emoji-picker__emoji img.emoji {
                height: 1em;
                width: 1em;
                margin: 0 0.05em 0 0.1em;
                vertical-align: -0.1em;
            }

            .emoji-picker__search-icon {
                display: none;
            }

            .emoji-picker__search-container {
                position: relative;
                border-bottom: 2px solid #f5f8fb;
                padding: 0.75rem 0;
            }

            .emoji-picker__search-not-found {
                padding: 0.75rem 0;
                text-align: center;
            }

            .emoji-picker__search-not-found .h2,
            .emoji-picker__search-not-found h2 {
                font-size: 15px;
                font-weight: 400;
                color: #95aac9;
            }

            .emoji-picker__search-not-found-icon {
                margin-bottom: 0.5rem;
            }

            .emoji-picker__category-buttons {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-pack: distribute;
                justify-content: space-around;
                border-bottom: 2px solid #f5f8fb;
                padding: 0.75rem 0;
            }

            button.emoji-picker__category-button {
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                background: 0 0;
                padding: 0;
                border: none;
                cursor: pointer;
                color: #95aac9;
                outline: 0;
            }

            button.emoji-picker__category-button.active {
                color: #2787f5;
            }

            img[data-action="zoom"] {
                cursor: -webkit-zoom-in;
                cursor: zoom-in;
            }

            .zoom-img,
            .zoom-img-wrap {
                position: relative;
                z-index: 1055;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            img.zoom-img {
                cursor: -webkit-zoom-out;
                cursor: zoom-out;
            }

            .zoom-overlay {
                cursor: -webkit-zoom-out;
                cursor: zoom-out;
                z-index: 1054;
                background: #fff;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                filter: "alpha(opacity=0)";
                opacity: 0;
                -webkit-transition: opacity 0.3s;
                transition: opacity 0.3s;
            }

            .zoom-overlay-open .zoom-overlay {
                filter: "alpha(opacity=100)";
                opacity: 1;
            }

            [data-dz-size]>strong {
                font-weight: 400;
            }

            .dropzone-image-preview {
                display: none;
            }

            .dz-image-preview .dropzone-file-preview {
                display: none;
            }

            .dz-image-preview .dropzone-image-preview {
                display: block;
            }

            .dz-preview {
                border-top-left-radius: 1.2rem;
                border-top-right-radius: 1.2rem;
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .dz-preview.dz-preview-moved {
                margin-bottom: -1.9375rem;
            }

            .dz-preview.dz-preview-moved+.chat-form::before {
                content: "";
                display: block;
                height: 2px;
                background: #d9e4f0;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
            }
        </style>

        <div class="card">
            <div class="card-body chat-body hide-scrollbar flex-1 h-100 pt-0" style="max-height: 345px;">
                <div class="chat-body-inner" style="max-height: 430px; overflow: auto;">
                    <div class="py-6 py-lg-12">
                        <!-- <div class="message-divider">
                            <span class="text-muted">24 Ags 2023</span>
                        </div> -->


                        <?php foreach ($data_tiket_all as $key) {
                            if ($key->is_admin == "Y") { ?>
                                <div class="message">

                                    <a class="avatar avatar-responsive" data-bs-toggle="tooltip" href="javascript:;" data-bs-placement="right" data-bs-html="true" aria-label="<b class='text-primary' style='letter-spacing:0.1em;'>[Admin]</b> Admin Raja Sosmed" data-bs-original-title="<b class='text-primary' style='letter-spacing:0.1em;'>[Admin]</b> Admin Raja Sosmed">
                                        <img class="avatar-img" src="https://raja-sosmed.com/assets/images/male.jpg" alt="">
                                    </a>
                                    <div class="message-inner">
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="message-text text-white pb-0">
                                                    <?= $key->pesan ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-footer">
                                            <span class="extra-small text-muted">
                                                <?= $this->GZL->format_tanggal($key->date_g) ?> </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="message message-out">

                                    <a class="avatar avatar-responsive" data-bs-toggle="tooltip" href="javascript:;" data-bs-placement="left" data-bs-html="true" aria-label="<b class='text-success' style='letter-spacing:0.1em;'>[Anda]</b> Ahmad Ghozali" data-bs-original-title="<b class='text-success' style='letter-spacing:0.1em;'>[Anda]</b> Ahmad Ghozali">
                                        <img class="avatar-img" src="https://raja-sosmed.com/assets/images/male.jpg" alt="">
                                    </a>
                                    <div class="message-inner">
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="message-text text-light pb-0" style="background-color:#3ec9d6;">
                                                    <?= $key->pesan ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-footer">
                                            <span class="extra-small text-muted">
                                                <?= $this->GZL->format_tanggal($key->date_g) ?> </span>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"><i class="far fa-comments me-2"></i> &nbsp;Balas Tiket</h4>
            </div>
            <div class="card-body pb-3">
                <form method="POST" action="<?= base_url("tiket-reply-sv") ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" name="id_tickets" id="id_tickets" value="<?= $this->GZL->enkrip($id) ?>">
                    <div class="form-group">
                        <label class="form-label">Pesan <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="content" id="content" rows="4" required></textarea>
                    </div>
                    <div class="mb-0">
                        <a class="btn btn-danger " href="<?= base_url("tiket") ?>"><i class="fas fa-rotate-left "></i> Kembali</a>
                        <button type="submit" class="btn btn-success "><i class="fas fa-paper-plane "></i> Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>