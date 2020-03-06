<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="
    min-height: 200px;
    position: fixed;
    top: 0;
    z-index: 999999;
    right: 30px;">
    <!-- Then put toasts within -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="toast-body">
            We are now connected <span data-dismiss="toast">close</span>
        </div>
    </div>
</div>

<style type="text/css">
    .toast {
        background-color: #2196F3;
        border: 1px #D6DCE5 solid;
        padding: 10px 20px;
        color:#fff;
        display: none;
    }
    .toast span {
        cursor: pointer;
        font-family: 'SFCompactDisplay-SemiBold', sans-serif;
        text-decoration: underline;
        padding: 0 10px;
        font-weight: bold;
    }

</style>