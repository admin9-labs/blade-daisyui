# Card

DaisyUI [Card](https://daisyui.com/components/card/) 的 Blade 封装。

## 用法

```blade
<x-dui::card>
    <x-dui::card.body>
        <x-dui::card.title>标题</x-dui::card.title>
        <p>卡片内容</p>
        <x-dui::card.actions>
            <x-dui::button color="primary">操作</x-dui::button>
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
| tag | string | 'h2' | h1, h2, h3, h4, h5, h6, p, div, span |

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
            <x-dui::button color="primary">立即购买</x-dui::button>
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

## 使用建议

### Best used for

- 作为 stats、list、table、form 的视觉容器
- 需要明确标题层级和操作区分离的模块
- 使用 `border` / `dash` 来建立层次，而不是只靠背景色

### Avoid when

- 一屏内所有卡片都使用同样的密度、边框和背景
- `side` 布局里左右内容权重过于接近，导致像误排版
- 把 card 当成无差别外壳，忽略内部节奏
