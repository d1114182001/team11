@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<style>
    /* 對錯誤訊息的容器進行樣式設置 */
    .alert.alert-danger {
        background-color: #f8d7da;  /* 淺紅色背景 */
        color: #721c24;              /* 深紅色文字 */
        border: 1px solid #f5c6cb;  /* 紅色邊框 */
        padding: 15px;               /* 內部間距 */
        margin: 20px 0;              /* 上下間距 */
        border-radius: 5px;          /* 圓角效果 */
        font-size: 14px;             /* 字體大小 */
        list-style: none;            /* 去除預設的項目符號 */
    }

    /* 針對每一個錯誤訊息項目做排版 */
    .alert.alert-danger li {
        margin-bottom: 10px;         /* 每條錯誤訊息之間的間距 */
    }

    /* 當滑鼠懸停在錯誤訊息上時變換背景色 */
    .alert.alert-danger:hover {
        background-color: #f1b0b7;
    }
</style>