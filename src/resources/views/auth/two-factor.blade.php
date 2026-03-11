{{-- 1. SVGの出力を「安全な場所から」と明示するコメントを添える --}}
{{-- 2. リカバリコードを少し隠す工夫 --}}
<div class="p-4 border rounded shadow-sm">
    <h3 class="text-lg font-bold">2要素認証設定</h3>

    @if (! $enabled)
    <form method="POST" action="/user/two-factor-authentication">
        @csrf
        <button type="submit" class="btn btn-primary">有効化する</button>
    </form>
    @else
    <div class="alert alert-success">✅ 2要素認証は有効です。</div>

    <div class="mt-4">
        <p>認証アプリでスキャンしてください：</p>
        <div class="p-2 bg-white inline-block">
            {!! $user->twoFactorQrCodeSvg() !!}
        </div>
    </div>

    <div class="mt-4 p-3 bg-gray-100 rounded">
        <p class="font-bold text-red-600">⚠️ リカバリコード（厳重保管！）</p>
        <details>
            <summary>クリックしてコードを表示</summary>
            <code class="block mt-2">
                @foreach ($user->recoveryCodes() as $code)
                {{ $code }}<br>
                @endforeach
            </code>
        </details>
    </div>
    @endif
</div>