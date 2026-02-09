# Text Rotate

DaisyUI [Text Rotate](https://daisyui.com/components/text-rotate/) 的 Blade 封装。

## 用法

```blade
<x-dui::text-rotate>
    <span>
        <span>第一段文字</span>
        <span>第二段文字</span>
        <span>第三段文字</span>
    </span>
</x-dui::text-rotate>
```

> **注意**: DaisyUI 5 的 `text-rotate` 需要嵌套结构：`<span class="text-rotate"><span><span>文字</span>...</span></span>`。组件自动添加外层 `<span class="text-rotate">`，用户需在内部再包一层 `<span>` 来包裹各文字项。

## Props

无额外 Props。

## 示例

### 基础文字轮播

```blade
<p class="text-4xl font-bold">
    我们提供
    <x-dui::text-rotate>
        <span>
            <span>最好的服务</span>
            <span>创新的方案</span>
            <span>专业的团队</span>
        </span>
    </x-dui::text-rotate>
</p>
```

### 配合标题使用

```blade
<h1 class="text-5xl font-bold">
    <x-dui::text-rotate>
        <span>
            <span>Hello</span>
            <span>你好</span>
            <span>Bonjour</span>
            <span>Hola</span>
        </span>
    </x-dui::text-rotate>
    World!
</h1>
```

## 渲染结果

```html
<span class="text-rotate">
    <span>
        <span>第一段文字</span>
        <span>第二段文字</span>
        <span>第三段文字</span>
    </span>
</span>
```
