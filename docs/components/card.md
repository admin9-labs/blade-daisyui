# Card

DaisyUI [Card](https://daisyui.com/components/card/) 的 Blade 封装。

## 用法

```blade
<x-dui::card>
    <x-dui::card.body>
        <x-dui::card.title>标题</x-dui::card.title>
        <p>卡片内容</p>
        <x-dui::card.actions>
            <button class="btn btn-primary">操作</button>
        </x-dui::card.actions>
    </x-dui::card.body>
</x-dui::card>
```

## Props

### card (index)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| variant | string\|null | null | border, dash |
| size | string\|null | null | xs, sm, md, lg, xl |
| side | bool | false | — |

### card.title

| Prop | Type | Default | Values |
|------|------|---------|--------|
| tag | string | 'h2' | h1, h2, h3, h4, h5, h6, div, span |

### card.body

无额外 Props。

### card.actions

无额外 Props。

## 子组件

- `<x-dui::card.body>` — 卡片主体区域
- `<x-dui::card.title>` — 卡片标题
- `<x-dui::card.actions>` — 卡片操作区域

## 示例

### 基础卡片

```blade
<x-dui::card class="bg-base-100 w-96 shadow-sm">
    <figure>
        <img src="/img/photo.jpg" alt="封面" />
    </figure>
    <x-dui::card.body>
        <x-dui::card.title>卡片标题</x-dui::card.title>
        <p>这是一段卡片描述文字。</p>
        <x-dui::card.actions class="justify-end">
            <button class="btn btn-primary">立即购买</button>
        </x-dui::card.actions>
    </x-dui::card.body>
</x-dui::card>
```

### 带边框样式

```blade
<x-dui::card variant="border" class="bg-base-100 w-96">
    <x-dui::card.body>
        <x-dui::card.title>边框卡片</x-dui::card.title>
        <p>使用 border 变体。</p>
    </x-dui::card.body>
</x-dui::card>
```

### 横向布局

```blade
<x-dui::card side class="bg-base-100 shadow-sm">
    <figure>
        <img src="/img/photo.jpg" alt="封面" />
    </figure>
    <x-dui::card.body>
        <x-dui::card.title>横向卡片</x-dui::card.title>
        <p>图片在左侧。</p>
    </x-dui::card.body>
</x-dui::card>
```

### 自定义标题标签

```blade
<x-dui::card.title tag="h3">使用 h3 标签</x-dui::card.title>
```

## 渲染结果

```html
<div class="card card-border bg-base-100 w-96">
    <div class="card-body">
        <h2 class="card-title">卡片标题</h2>
        <p>内容</p>
        <div class="card-actions justify-end">
            <button class="btn btn-primary">操作</button>
        </div>
    </div>
</div>
```
