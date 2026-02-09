# Diff

DaisyUI [Diff](https://daisyui.com/components/diff/) 的 Blade 封装。

## 用法

```blade
<x-dui::diff>
    <x-dui::diff.item-1>
        <img src="/img/before.jpg" alt="修改前" />
    </x-dui::diff.item-1>
    <x-dui::diff.item-2>
        <img src="/img/after.jpg" alt="修改后" />
    </x-dui::diff.item-2>
    <x-dui::diff.resizer />
</x-dui::diff>
```

## Props

### diff (index)

无额外 Props。自动添加 `tabindex="0"`。

### diff.item-1

无额外 Props。自动添加 `role="img"` 和 `tabindex="0"`。

### diff.item-2

无额外 Props。自动添加 `role="img"`。

### diff.resizer

无额外 Props。

## 子组件

- `<x-dui::diff.item-1>` — 第一个对比项（底层）
- `<x-dui::diff.item-2>` — 第二个对比项（顶层）
- `<x-dui::diff.resizer>` — 拖动调整器

## 示例

### 图片对比

```blade
<x-dui::diff class="aspect-16/9">
    <x-dui::diff.item-1>
        <img src="/img/before.jpg" alt="修改前" />
    </x-dui::diff.item-1>
    <x-dui::diff.item-2>
        <img src="/img/after.jpg" alt="修改后" />
    </x-dui::diff.item-2>
    <x-dui::diff.resizer />
</x-dui::diff>
```

### 文字对比

```blade
<x-dui::diff class="aspect-16/9 rounded-box border border-base-300">
    <x-dui::diff.item-1>
        <div class="bg-primary text-primary-content grid place-content-center text-9xl font-black">
            DAISY
        </div>
    </x-dui::diff.item-1>
    <x-dui::diff.item-2>
        <div class="bg-base-200 grid place-content-center text-9xl font-black">
            DAISY
        </div>
    </x-dui::diff.item-2>
    <x-dui::diff.resizer />
</x-dui::diff>
```

## 渲染结果

```html
<figure class="diff" tabindex="0">
    <div class="diff-item-1" role="img" tabindex="0">
        <img src="/img/before.jpg" alt="修改前" />
    </div>
    <div class="diff-item-2" role="img">
        <img src="/img/after.jpg" alt="修改后" />
    </div>
    <div class="diff-resizer"></div>
</figure>
```
