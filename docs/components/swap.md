# Swap

DaisyUI [Swap](https://daisyui.com/components/swap/) 的 Blade 封装。

## 用法

```blade
<x-dui::swap>
    <x-slot:on>ON</x-slot:on>
    <x-slot:off>OFF</x-slot:off>
</x-dui::swap>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| active | bool | false | — |
| effect | string | null | rotate, flip |

## Slots

| Slot | 说明 |
|------|------|
| on | checkbox 选中时（或 swap-active 时）显示的内容 |
| off | checkbox 未选中时显示的内容 |
| indeterminate | checkbox 不确定状态时显示的内容 |
| default | 默认 slot，可放置额外内容 |

## 示例

### 文本切换

```blade
<x-dui::swap>
    <x-slot:on>ON</x-slot:on>
    <x-slot:off>OFF</x-slot:off>
</x-dui::swap>
```

### 旋转效果（图标切换）

```blade
<x-dui::swap effect="rotate">
    <x-slot:on>
        <svg class="h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41..."/>
        </svg>
    </x-slot:on>
    <x-slot:off>
        <svg class="h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M21.64,13a1,1,0,0,0-1.05-.14..."/>
        </svg>
    </x-slot:off>
</x-dui::swap>
```

### 翻转效果

```blade
<x-dui::swap effect="flip" class="text-9xl">
    <x-slot:on>😈</x-slot:on>
    <x-slot:off>😇</x-slot:off>
</x-dui::swap>
```

### 使用 class 激活（无 checkbox）

```blade
<x-dui::swap :active="true" class="text-6xl">
    <x-slot:on>🥳</x-slot:on>
    <x-slot:off>😭</x-slot:off>
</x-dui::swap>
```

## 渲染结果

```html
<!-- 基础 swap -->
<label class="swap">
    <input type="checkbox" />
    <div class="swap-on">ON</div>
    <div class="swap-off">OFF</div>
</label>

<!-- 带旋转效果 -->
<label class="swap swap-rotate">
    <input type="checkbox" />
    <div class="swap-on">...</div>
    <div class="swap-off">...</div>
</label>

<!-- 使用 class 激活（无 checkbox） -->
<label class="swap swap-active">
    <div class="swap-on">🥳</div>
    <div class="swap-off">😭</div>
</label>
```
