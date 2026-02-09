# FAB

DaisyUI [FAB / Speed Dial](https://daisyui.com/components/fab/) 的 Blade 封装。

## 用法

```blade
<x-dui::fab>
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
    <button class="btn btn-lg btn-circle">A</button>
    <button class="btn btn-lg btn-circle">B</button>
    <button class="btn btn-lg btn-circle">C</button>
</x-dui::fab>
```

## Props

### fab (主组件)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| flower | bool | false | — |

### fab.close (子组件)

无自定义 Props，自动添加 `fab-close` class。

### fab.main-action (子组件)

无自定义 Props，自动添加 `fab-main-action` class。

## 子组件

- `<x-dui::fab.close>` - 关闭按钮容器，FAB 打开时替换原始按钮
- `<x-dui::fab.main-action>` - 主操作按钮容器，FAB 打开时替换原始按钮

## 示例

### 垂直 Speed Dial

```blade
<x-dui::fab>
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
    <button class="btn btn-lg btn-circle">A</button>
    <button class="btn btn-lg btn-circle">B</button>
    <button class="btn btn-lg btn-circle">C</button>
</x-dui::fab>
```

### 带标签

```blade
<x-dui::fab>
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-success">F</div>
    <div>Label A <button class="btn btn-lg btn-circle">A</button></div>
    <div>Label B <button class="btn btn-lg btn-circle">B</button></div>
</x-dui::fab>
```

### 带关闭按钮

```blade
<x-dui::fab>
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-info">F</div>
    <x-dui::fab.close>
        Close <span class="btn btn-circle btn-lg btn-error">✕</span>
    </x-dui::fab.close>
    <div>Label A <button class="btn btn-lg btn-circle">A</button></div>
    <div>Label B <button class="btn btn-lg btn-circle">B</button></div>
</x-dui::fab>
```

### 带主操作按钮

```blade
<x-dui::fab>
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
    <x-dui::fab.main-action>
        Main Action <button class="btn btn-circle btn-secondary btn-lg">M</button>
    </x-dui::fab.main-action>
    <div>Label A <button class="btn btn-lg btn-circle">A</button></div>
    <div>Label B <button class="btn btn-lg btn-circle">B</button></div>
</x-dui::fab>
```

### 花形排列 (Flower)

```blade
<x-dui::fab :flower="true">
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-success">F</div>
    <button class="btn btn-lg btn-circle">A</button>
    <button class="btn btn-lg btn-circle">B</button>
    <button class="btn btn-lg btn-circle">C</button>
    <button class="btn btn-lg btn-circle">D</button>
</x-dui::fab>
```

### 单个浮动按钮

```blade
<x-dui::fab>
    <button class="btn btn-lg btn-circle btn-primary">F</button>
</x-dui::fab>
```

## 渲染结果

```html
<!-- 垂直 Speed Dial -->
<div class="fab">
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
    <button class="btn btn-lg btn-circle">A</button>
    <button class="btn btn-lg btn-circle">B</button>
</div>

<!-- 花形排列 -->
<div class="fab fab-flower">
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-success">F</div>
    <button class="btn btn-lg btn-circle">A</button>
    <button class="btn btn-lg btn-circle">B</button>
</div>

<!-- 带关闭按钮 -->
<div class="fab">
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-info">F</div>
    <div class="fab-close">Close <span class="btn btn-circle btn-lg btn-error">✕</span></div>
    ...
</div>

<!-- 带主操作按钮 -->
<div class="fab">
    <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
    <div class="fab-main-action">Main Action <button class="btn btn-circle btn-secondary btn-lg">M</button></div>
    ...
</div>
```
