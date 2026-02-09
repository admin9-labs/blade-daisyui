# Countdown

DaisyUI [Countdown](https://daisyui.com/components/countdown/) 的 Blade 封装。

## 用法

```blade
<x-dui::countdown :value="42" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| value | int | 0 | 0-999 |

## 示例

### 基础倒计时

```blade
<x-dui::countdown :value="25" />
```

### 时钟样式倒计时

```blade
<div class="flex gap-5">
    <div>
        <x-dui::countdown :value="15" class="font-mono text-4xl" />
        <span>hours</span>
    </div>
    <div>
        <x-dui::countdown :value="10" class="font-mono text-4xl" />
        <span>min</span>
    </div>
    <div>
        <x-dui::countdown :value="34" class="font-mono text-4xl" />
        <span>sec</span>
    </div>
</div>
```

### 带标签的倒计时

```blade
<div class="grid auto-cols-max grid-flow-col gap-5 text-center">
    <div class="bg-neutral text-neutral-content rounded-box flex flex-col p-2">
        <x-dui::countdown :value="15" class="font-mono text-5xl" />
        days
    </div>
    <div class="bg-neutral text-neutral-content rounded-box flex flex-col p-2">
        <x-dui::countdown :value="10" class="font-mono text-5xl" />
        hours
    </div>
    <div class="bg-neutral text-neutral-content rounded-box flex flex-col p-2">
        <x-dui::countdown :value="24" class="font-mono text-5xl" />
        min
    </div>
    <div class="bg-neutral text-neutral-content rounded-box flex flex-col p-2">
        <x-dui::countdown :value="52" class="font-mono text-5xl" />
        sec
    </div>
</div>
```

## 渲染结果

```html
<span class="countdown font-mono text-4xl">
    <span style="--value:42;"></span>
</span>
```
